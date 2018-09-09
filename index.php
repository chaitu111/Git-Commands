Git Version Controller


--->	git init              ----  Initializing the Local Git Folder

--->	git clone github_url  ----  Clone the github repo


Push Files to Github Repo

--->	git add filename
		git commit -m "test msg"
		git push --- to upload to repository
		

Render Modified Files From Github Repo
		
--->	git pull ---- to get files from git repository


Remove the file only from From the Local filesystem

--->    git rm filename 
--->    git commit -m "msg"
	
Remove the file only from the Git repository and not from the filesystem
	
--->	git rm --cached file1.txt
--->    git commit -m "remove file1.txt"

And to push changes to remote repo

--->	git push origin branch_name
