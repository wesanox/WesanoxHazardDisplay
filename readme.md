# WesanoxHazardDisplay

WesanoxHazardDisplay is a ProcessWire module that adds a configurable hazard / information modal to your website.
The module automatically installs required dependencies, creates all necessary fields, and injects a Bootstrap-based modal into the frontend output.

It is designed to display important notices, warnings, or information banners globally or on the homepage.

This module is part of the Wesanox ecosystem and integrates seamlessly with the Wesanox Framework and helper modules.

---

## IMPORTANT NOTICE

Before installing WesanoxHazardDisplay, you must manually install:

- WesanoxHelperClasses
https://github.com/wesanox/WesanoxHelperClasses

- WesanoxHelperFields
https://github.com/wesanox/WesanoxHelperFields

This helper module is required for:

- Automated download & installation of dependencies
- Utility functions used during installation

---

## Module Information

This module provides:

### Automatic installation of external modules (via ZIP download)

- WesanoxFrameworkPackage
- WesanoxHelperFields
- WesanoxHelperClasses

### Automatic creation of:

- Required fields (loaded from /config/fields.php)
- A notice / hazard configuration tab on the home template
- A Bootstrap-compatible modal rendered on the frontend

### Frontend behavior:

- Injects a modal directly after the <body> tag
- Displays only when the hazard checkbox is enabled
- Supports internal or external links with custom link text

### Compatibility

- ProcessWire 3.0.246+
- PHP 8.2+
- WesanoxFrameworkPackage 0.0.1+
- WesanoxHelperFields 0.0.1+
- WesanoxHelperClasses 0.0.1+

---

## Installation

### 1. Install Required Helper Modules (Manual)

You must install the following module manually first:

- WesanoxHelperClasses
https://github.com/wesanox/WesanoxHelperClasses

---

### 2. Install WesanoxHazardDisplay

1. Place the module folder in:

    ```
    /site/modules/WesanoxHazardDisplay/
    ```

2. Install the module via the ProcessWire admin.

---

### What Happens During Installation

During installation, the module will:

- Download and install required external modules if missing
- Create all fields defined in:

   ```
   /config/fields.php
   ```

- Add the following fields to the home template (or create a fallback template if needed):

### Fields Added

- tab_notice
- checkbox_hazard
- link_intern
- link_extern
- link_text
- text
- tab_notice_END

If the template already exists, the fields will be appended automatically.

---

### How It Works

## Configuration

The hazard modal is configured directly on the home page template:

1. Enable the hazard display using:
   - checkbox_hazard

2. Enter the modal content using:
   - text

3. Define an optional link:
    - Internal page (link_intern) or
    - External URL (link_extern)
    - Custom button label (link_text)

---

## Frontend Rendering

- The module hooks into:

   ```
   Page::render
   ```

- The modal HTML is injected after the <body> tag
- The modal is only rendered when:
   - The checkbox is active
   - The current page uses the home template

The output is Bootstrap-compatible and can be styled freely.

---

## Uninstallation

On uninstall, the module performs a clean rollback:

- Removes all hazard-related fields from the home template
- Leaves no frontend hooks active
- Does not delete shared helper modules

No leftover fields or template modifications remain.

---

### External Modules Installed Automatically

If missing, the module installs:

- WesanoxFrameworkPackage
https://github.com/wesanox/WesanoxFrameworkPackage

- WesanoxHelperFields
https://github.com/wesanox/WesanoxHelperFields

- WesanoxHelperClasses
https://github.com/wesanox/WesanoxHelperClasses