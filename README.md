
git init

git add .

git commit -m "first commit"

git remote add origin https://github.com/chaitu111/hrm.git

git push -u origin master

========================================


Step 1 : Download Git And Install : https://git-scm.com/download/win

Step 2: Create and Account in Github

Git Version Controller Commands

Step 3:

Create a Folder in Your Local System , then Go to Organise->Folder and Search Options -> View -> Check [Show Hidden Files, Folders and Drives]

Step 4: Command to Initilize the Local Git file system

---> git init

Step 5: Clone the exsisting github repo

---> git clone github_url

Step 6: Configure Your account

git config --global user.email "you@example.com"

git config --global user.name "Your Name"


Step 7: Upload Files from Local Machine to Github Repo

---> git add filename

---> git commit -m "test msg"

---> git push


Step 8: Render Modified Files From Github Repo

---> git pull

Others

Push All Files or a Folder to Github Repo

---> git add . (To add all files)

---> git add ./folderName (To add a particular foldername)

==================================


Remove the file only from From the Local filesystem

---> git rm filename

---> git commit -m "msg"



Remove the file only from the Git repository

---> git rm --cached file1.txt

---> git commit -m "remove file1.txt"

---> git push origin branch_name


Push Files to Github Repo

---> git add filename

---> git commit -m "test msg"

---> git push or git push -u origin master


Push Files to Github Repo First Time

--->git remote add origin github_url

--->git remote -v

--->git push origin master

