# Pour ne plus rentrer son code avant chaque push
*Parce que c'est relou*


	ssh-keygen -t rsa -b 4096 -C "ton_email@example.com"   
	
Te crée une nouvelle clé ssh 

Entrer le dossier dans lequel enregistrer la clé (/c/Users/toi/.ssh/id_rsa):[Press enter]
Entrer password (Vide si tu veux pas de password): [Type a password]
Entrer le même password: [Type password again]


	eval $(ssh-agent -s)

Lancer le ssh-agent

	ssh-add ~/.ssh/id_rsa

Ajoute la clé au ssh-agent

# Si tu a déjà un remote en http et que tu veux le changer en ssh du coup

	git remote -v

Vérifie quel est ton remote
	
	git remote set-url origin git@github.com:USERNAME/REPOSITORY.git

Transforme ton remote en ssh
	
	git remote -v

Vérifie que le job est bien fait