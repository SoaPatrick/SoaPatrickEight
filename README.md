ThemeBox
=========

Hi. I'm a starter theme called `ThemeBox`.

Getting Started
---------------

The first thing you want to do is copy the `themebox` directory and change the name to something else (like, say, `theme-one`), and then you'll need to do a three-step find and replace on the name in all the templates.

1. Search for: `'themebox'` and replace with: `'theme-one'`.
2. Rename `themebox.pot` from `languages` folder to use the theme's slug
3. Update or delete this readme.

Bitbucket Pipelines
-------------------

To configure Bitbucket Pipelines, do the following steps. The current `bitbucket-pipelines.yml` file is configured only for master(production) enviroment. Expand if necessarry.

1. Enable Pipelines
2. Configure the following Repository Variables
	* `REMOTE_USER`
	* `REMOTE_SERVER`
	* `REMOTE_PATH`
3. Create SSH Key and add Public Key to server
4. Add Known host
5. Configure deployment environments

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!