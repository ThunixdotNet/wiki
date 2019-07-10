man(8) Ansible on Thunix man(8)

NAME Ansible on Thunix - how we manage the server

SYNOPSIS ansible-pull

DESCRIPTION We use ansible to manage the servers running the systems and
services for Thunix. Ansible consists of a "playbook" of YAML files,
that declare the state of the system.

       The first step is to clone the repo used to manage the environment:

       git clone git@ttm.sh:thunix/ansible.git (You will need a tidegit account for this, and a key loaded into your account there)

       From there, the typical github-type workflow is used:

       * Create a local branch, to track your issue's changes.

       * Commit changes to your local branch.

       * Send a URI pointing to your repo, with branch name to someone with merge permissions

       Inside of the tildegit interface:

       * Create a new branch, selecting option to create a branch and pull request

       * Make changes in your branch

       * Update PR

       * Wait for someone to merge your changes

       Hourly, a job runs that pulls the latest version of the repo, and the runs ansible-playbook against the playbook.  A sudoer can manually run this job, if desired,
       and it's located at /etc/cron.hourly/ansible-pull.

SEE ALSO tildegit.org(8), git(8), ansible-playbook(8)

BUGS No known bugs.

AUTHOR Uber Geek (ubergeek@thunix.net)

1.1 19 February 2019 man(8)
