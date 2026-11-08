#!/usr/bin/env python3
"""Build the static site for GitHub Pages from the existing HTML preview."""

from __future__ import annotations

import argparse
import posixpath
import re
import shutil
from pathlib import Path, PurePosixPath
from urllib.parse import quote, unquote, urlsplit, urlunsplit


ROOT = Path(__file__).resolve().parents[1]
SOURCE = ROOT / "আলহেরাসাইট - Copy" / "cloned_site"
URL_ATTRIBUTES = re.compile(
    r"""(?P<prefix>\b(?:href|src|action|poster|data-src|data-href|content)\s*=\s*)"""
    r"""(?P<quote>["'])(?P<url>[^"']*)(?P=quote)""",
    re.IGNORECASE,
)
QUOTED_ROOT_URL = re.compile(r"""(?P<quote>["'])(?P<url>/(?!/)[^"']*)(?P=quote)""")
UNBUNDLED_FA_FONT = re.compile(r"@font-face\{[^}]*fa-v4compatibility[^}]*\}", re.IGNORECASE)


def static_target(source: Path, page: PurePosixPath, url_path: str) -> PurePosixPath | None:
    decoded = unquote(url_path)
    if decoded in ("", "/"):
        candidates = [PurePosixPath("index.html")]
    else:
        requested = PurePosixPath(decoded.lstrip("/")) if decoded.startswith("/") else page.parent / decoded
        candidates = [requested]
        if requested.suffix.lower() == ".php":
            candidates.insert(0, requested.with_suffix(".html"))
        elif not requested.suffix:
            candidates.insert(0, requested.with_suffix(".html"))
            candidates.insert(1, requested / "index.html")

        if requested.name.endswith(".php"):
            candidates.append(PurePosixPath("Frontend") / requested.with_suffix(".html").name)

    for candidate in candidates:
        if candidate.is_absolute() or ".." in candidate.parts:
            continue
        if (source / Path(*candidate.parts)).is_file():
            return candidate
    return None


def rewrite_url(source: Path, page: PurePosixPath, value: str) -> str:
    parsed = urlsplit(value)
    if parsed.scheme or parsed.netloc or not parsed.path or parsed.path.startswith("//"):
        return value
    if not parsed.path.startswith("/") and not parsed.path.lower().endswith(".php"):
        return value

    target = static_target(source, page, parsed.path)
    if target is None:
        return value

    start = page.parent.as_posix()
    relative = PurePosixPath(posixpath.relpath(target.as_posix(), start=start))
    encoded_path = quote(relative.as_posix(), safe="/-._~")
    return urlunsplit(("", "", encoded_path, parsed.query, parsed.fragment))


def rewrite_file(source: Path, output: Path, file_path: Path) -> None:
    relative = PurePosixPath(file_path.relative_to(output).as_posix())
    content = file_path.read_text(encoding="utf-8")
    rewritten = URL_ATTRIBUTES.sub(
        lambda match: match.group("prefix")
        + match.group("quote")
        + rewrite_url(source, relative, match.group("url"))
        + match.group("quote"),
        content,
    )
    rewritten = QUOTED_ROOT_URL.sub(
        lambda match: match.group("quote")
        + rewrite_url(source, relative, match.group("url"))
        + match.group("quote"),
        rewritten,
    )
    if file_path.suffix.lower() == ".css":
        rewritten = UNBUNDLED_FA_FONT.sub("", rewritten)
    file_path.write_text(rewritten, encoding="utf-8")


def make_root_redirect(output: Path) -> None:
    (output / "index.html").write_text(
        """<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="0;url=Frontend/index.html">
  <title>আল হেরা অনলাইন মাদরাসা</title>
  <script>window.location.replace(new URL("Frontend/index.html", window.location.href));</script>
</head>
<body><a href="Frontend/index.html">আল হেরা অনলাইন মাদরাসায় প্রবেশ করুন</a></body>
</html>
""",
        encoding="utf-8",
    )


def main() -> None:
    parser = argparse.ArgumentParser(description=__doc__)
    parser.add_argument("--output", type=Path, default=ROOT / "_site")
    args = parser.parse_args()
    output = args.output.resolve()

    if not SOURCE.is_dir():
        raise SystemExit(f"Static source directory not found: {SOURCE}")
    if output in (ROOT, SOURCE) or SOURCE in output.parents:
        raise SystemExit("Output must not replace the repository or source directory.")
    if output.exists():
        if output != ROOT / "_site":
            raise SystemExit(f"Output directory already exists: {output}")
        shutil.rmtree(output)

    shutil.copytree(
        SOURCE,
        output,
        ignore=shutil.ignore_patterns("*.php", "__pycache__", "*.pyc"),
    )

    for file_path in sorted(output.rglob("*")):
        if file_path.is_file() and file_path.suffix.lower() in {".html", ".css"}:
            rewrite_file(SOURCE, output, file_path)

    make_root_redirect(output)
    (output / ".nojekyll").touch()
    print(f"GitHub Pages site built at {output}")


if __name__ == "__main__":
    main()
