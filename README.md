# Argo Theme für Spacifik

Zuerst Wordpress mit Docker hochfahren, dafür ```./start.sh``` ausführen. Um Wordpress wieder zu stoppen, ```./stop.sh``` ausführen. 

Um mit SCSS zu arbeiten, im argo ordner ```npm install``` und dann ```npm run watch``` ausführen, um dateien im scss ordner automatisch zu kompilieren.

Um einen release zu taggen und automatisch hochzuladen, zuerst ```git add .```, dann ```git commit -m "Nachricht"``` 

## Workflow zum hochladen:

Command | Result
---|---
```git add .``` | Add files to commit
```git commit -m "message for commit"``` | Commit files
```git tag v1.0.0 -m "message for tag"``` | Tag version
```git push --follow-tags``` | Push commit along with tags