-- Créer la table 'post' avec id auto-incrémenté, titre, chemin de la photo, nombre de likes et nombre de commentaires
CREATE TABLE IF NOT EXISTS post (
    id SERIAL PRIMARY KEY,  -- Identifiant auto-incrémenté
    titre VARCHAR(255) NOT NULL,  -- Titre du post, taille max 255 caractères
    photo TEXT NOT NULL CHECK (photo <> ''),  -- Chemin du fichier image (local ou URL), non vide
    likes_count INT DEFAULT 0 CHECK (likes_count >= 0),  -- Nombre de likes, par défaut 0, doit être positif ou nul
    comments_count INT DEFAULT 0 CHECK (comments_count >= 0),  -- Nombre de commentaires, par défaut 0, doit être positif ou nul
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,  -- Date de création du post
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  -- Dernière mise à jour
);

-- Commentaire sur la table
COMMENT ON TABLE post IS 'Table des posts contenant un titre, un chemin pour la photo, un compteur de likes et de commentaires.';
