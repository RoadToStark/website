### Models

**Project**

- id
- name
- description
- presentation 
- picture
- owner (FK)

**Roadmap**

- id
- project
- description
- Tasks (FK)

**Tasks**

- id
- beginning
- end
- name
- description
- detailed description
- ressources (FK)
- contributors (FK)

**Ressource**

- id
- type
- tasks
- url

**Contributor**

- id
- first name
- last name
- email
- picture
- description
- role

