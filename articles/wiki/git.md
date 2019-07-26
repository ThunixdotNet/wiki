**This document is unfinished, and in draft state**

# Git Crash Course

Git can take some getting used to, but once you've mastered a few of the operations, it really begins to make sense.

## Common Workflow

A common workflow goes like this:

1. Clone Repo
2. Create a *feature branch*
3. Switch to your feature branch
4. Make changes
5. Ask for a merge/merge into master
6. Push to your origin

### Clone Repo

To clone a repo, you use the git clone command, ie

```
git clone https://tildegit.org/thunix/ansible
```

This makes a local copy of the code repo.  Whatever changes you make here, nobody else sees what you did, until you *commit* and then *push*.

### Create Feature Branch

You usually don't want to work right on the *master* branch, until you're ready to push the code live.  So, to make a new feature branch, try this:

```
git branch -v
```

This will show you what branches you currently have.  You probably only have one right now:  *master*.  Let's make a new one:

```
git checkout -b UpdatingKey
```

Now do look at your branches again:

```
git branch -v
```

You'll see you know have *master* and *UpdatingKey*.  You'll see there's an asterisk next to *UpdatingKey*.  This means that is the branch you're currently working on.

### Make Changes

Let's make some changes in your new feature branch.

```
touch mykey.asc
git status
```

You'll see there is a file *mykey.asc* which says it's not currently tracked.  Let's add the file:

```
git add mykey.asc
git status
```

You should see there's a new file to commit.  Let's do that:

```
git commit -am 'Adding my key'
```


