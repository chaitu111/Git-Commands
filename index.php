Git Version Controller

Initializing the Local Git file system

--->	git init            

Push Files to Github Repo

--->	git add filename
--->	git commit -m "test msg"
--->	git push 
		
Render Modified Files From Github Repo
		
--->	git pull 

Remove the file only from From the Local filesystem

--->    git rm filename 
--->    git commit -m "msg"
	
Remove the file only from the Git repository

--->	git rm --cached file1.txt
--->    git commit -m "remove file1.txt"
--->	git push origin branch_name


Clone the exsisting github repo

--->	git clone github_url  
