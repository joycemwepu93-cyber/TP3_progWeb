<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire_Inscription</title>
    <style>
.contact-form {
    max-width: 700px;
    margin: 0 auto;
    background: white;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    text-align: left;
}

.form-group {
    margin-bottom: 30px;
}

.form-row {
    display: flex;
    gap: 20px;
}

.form-row .form-group {
    flex: 1;
}

label {
    display: block;
    margin-bottom: 10px;
    color: var(--accent);
    font-size: 9px;
    font-weight: 600;
}

input, select, textarea {
    width: 100%;
    padding: 12px 15px;
    border-radius: 8px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    background: #0f172a; 
    color: white;
    font-family: inherit;
    font-size: 1rem;
    transition: all 0.3s ease;
}

input:focus, select:focus, textarea:focus {
    outline: none;
    border-color: var(--accent);
    box-shadow: 0 0 8px rgba(56, 189, 248, 0.2);
}


select option {
    background: var(--bg-card);
    color: white;
}


.btn-submit {
    width: 100%;
    padding: 15px;
    background: var(--accent);
    color: var(--bg-dark);
    border: none;
    border-radius: 8px;
    font-weight: bold;
    font-size: 20px;
    cursor: pointer;
}

.btn-submit:hover {
    background: #7dd3fc; 
    transform: translateY(-2px);
}

    </style>
</head>
<body>
<form action="traitement.php" method="POST" class="contact-form">
                    <div class="form-group">
                        <label for="name">Nom complet</label>
                        <input type="text" id="name" name="name" placeholder="Votre nom et prénom" required>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="exemple@mail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="tel">Téléphone</label>
                            <input type="tel" id="tel" name="tel" placeholder="+243..." required>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label for="need">Votre besoin (Sujet)</label>
                        <select id="need" name="need" required>
                            <option value="" disabled selected>Choisissez une option</option>
                            <option value="web-design">Design d'application / UI-UX</option>
                            <option value="dev-web">Développement de site Web</option>
                            <option value="maintenance">Maintenance informatique</option>
                            <option value="autre">Autre demande</option>
                        </select>
                    </div>
        
                    <div class="form-group">
                        <label for="message">Détails de votre recherche</label>
                        <textarea id="message" name="message" rows="5" placeholder="Décrivez votre projet en quelques mots..." required></textarea>
                    </div>
        
                    <button type="submit" class="btn-submit">Envoyer la demande</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Flavia Tech - Joyce Mwepu</p>
    </footer>


</body>
</html>