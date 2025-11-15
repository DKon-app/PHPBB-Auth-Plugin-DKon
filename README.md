# DKon Authentication for PHPBB

## Overview

The DKon Authentication plugin allows users to log in to a PHPBB forum using their credentials from the DKon.app API. This extension enhances the user experience by providing a seamless authentication process.

## Features

- **API Integration**: Utilizes the DKon.app API to authenticate users.
- **User-Friendly Interface**: Provides a clean login form that is easy to integrate into your existing PHPBB theme.
- **Error Handling**: Displays error messages for failed logins, ensuring users are informed.
- **Session Management**: Automatically manages user sessions upon successful login.

## Installation

To install the DKon Authentication plugin, follow these steps:

1. **Download the Extension**: Clone or download the repository into the `phpbb/ext/` directory of your PHPBB installation.
    ```bash
    git clone <repository-url> phpbb/ext/dkon_auth
    ```

2. **Enable the Extension**:
   - Log in to the Admin Control Panel (ACP).
   - Navigate to the **Customize** tab.
   - Select **Manage Extensions**.
   - Find **DKon Authentication** and click the **Enable** button.

3. **Configure the Plugin**: If required, configure settings in the ACP for your specific use case.

## Usage

1. Navigate to the login page of your PHPBB forum.
2. Enter your DKon.app username and password.
3. Upon successful authentication, you will be redirected to the specified page.

## JavaScript Integration

The JavaScript for handling the login form submission is included in the plugin. It manages the API request and handles error messages effectively.

Browser support should be verified. Ensure that JavaScript is enabled in user settings to allow seamless functionality.

## Contribution

Contributions are welcome! If you wish to contribute, please follow these steps:

1. Fork the repository.
2. Create a new branch.
3. Make your changes and ensure the code is well-documented.
4. Submit a pull request.

## Support

https://DKon.app/dev 

## Issues

If you encounter any issues or have questions, please create an issue in the repository.

## Acknowledgments

- Thanks to the PHPBB community for their support and resources.
- Thanks to the DKon.app API for providing a robust authentication mechanism.

---

Feel free to customize this README file according to your project details and specific requirements.
