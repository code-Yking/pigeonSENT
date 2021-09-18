# pigeonSENT
Web-based chatting centered on database storage. 

*Project Discontinued*

2017 - Mid 2018

This project had several vulnerabilities that my old self did not properly scrutinize, and presents itself as a relic on how NOT to store user information.
- Passwords and chats were stored as plain-text in the database.
- The folders in root directory with user names are supposed to contain profile info and shared images. Even if they were moved off the root directory, the urls are easily guessable and could potentially expose user info.
- Possibilities of SQL injections not taken care of.

There were also some backend and frontend workflow that limited the functionality and maintainability of such a project which include 
- lack of proper database table relationships. eg. Tables were created for each chat.
- chat refresh at only a constant rate, ie, there were delays

