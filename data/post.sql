CREATE TABLE IF NOT EXISTS post (
    id SERIAL PRIMARY KEY,  -- Identifiant auto-incrémenté
    titre VARCHAR(255) NOT NULL,  -- Titre du post, taille max 255 caractères
    photo TEXT NOT NULL CHECK (photo <> ''),  -- Chemin du fichier image (local ou URL), non vide
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,  -- Date de création du post
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  -- Dernière mise à jour
);

COMMENT ON TABLE post IS 'Table des posts contenant un titre et un chemin pour la photo.';
