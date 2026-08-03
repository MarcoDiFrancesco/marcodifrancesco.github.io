# Agent Instructions

Jekyll portfolio & homelab site running on Ruby 3.2, customized with Minima.

## Environment & Run Commands

- **Ruby Version**: Must use exactly **Ruby 3.2** (specified in workflow and README).
- **Setup**: `script/bootstrap` (runs `gem install bundler && bundle install`).
  - *Gotcha*: On Kubuntu/Ubuntu, use `sudo bundle install` if permission errors occur.
- **Local Dev Server**: `script/server` (runs `bundle exec jekyll serve`).
  - *Network Access & LiveReload*: `bundle exec jekyll serve --livereload --host 0.0.0.0`.
- **Build**: `script/build` (builds to `./_site/`).
- **Verification**: `script/cibuild` (runs build and checks that `./_site/index.html` was generated successfully).
  - *Gotcha*: `script/cibuild` will print an error `Couldn't find a gemspec file matching 'minima.gemspec'` at the very end because there is no `.gemspec` file in the repo. This is expected behavior; focus on the "It builds!" output from `script/build`.

## Structure & Architecture

- **Decoupled Code & Content**: 
  - Keep root content files (like `index.md`, `life-outside-work.md`) raw; keep layout and UI in `_layouts/` and `_includes/`.
  - **No Inline `<style>` Blocks**: Place styles in modular SASS partials under `_sass/minima/` (e.g., `_services.scss`), then import in `_sass/minima.scss`.
- **Homepage Structure (`_layouts/home.html`)**:
  - Hosts both the subdomain service grid (`.services-section`) and the post list.

## Core UI & Layout Rules

- **Header Separator Line**: Elements styling `.post-list-heading` must use:
  ```css
  border-bottom: 1px solid #eaeaea;
  padding-bottom: 8px;
  margin-bottom: 18px;
  ```
- **Section Heading Emojis**:
  - `🐳 My Stack` (for Homelab/Docker subdomains)
  - `🚀 Projects` (for portfolio development projects)
- **Dashboard Grid (`.services-grid`)**:
  - **Mobile Layout**: Exactly **2 columns** (`repeat(2, 1fr)`) with `10px` padding & gaps.
  - **Desktop Layout** (min-width: 560px): Auto-filling grid, min card width **220px**, `15px` padding.
  - **Hover Animation**: Lift effect using:
    ```css
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    border-color: #2a7ae2;
    ```

## Context Maintenance & Persistent Memory

- **Self-Updating Rule**: This file acts as a living document for persistent AI context.
- When updating subdomains, styling conventions, or user design preferences, you **must update** this file (`AGENTS.md`) automatically.
