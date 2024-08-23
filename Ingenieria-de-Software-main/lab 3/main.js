const express = require('express');
const UserService = require('./userService');

const app = express();
const port = 3000;

app.use(express.json());

const userService = new UserService();

app.get('/users', (req, res) => {
  res.json(userService.getUsers());
});

app.post('/users', (req, res) => {
  const newUser = userService.addUser(req.body);
  res.status(201).json(newUser);
});

app.put('/users/:id', (req, res) => {
  const updatedUser = userService.editUser(req.params.id, req.body);
  if (updatedUser) {
    res.json(updatedUser);
  } else {
    res.status(404).json({ message: 'Usuario no encontrado' });
  }
});

app.delete('/users/:id', (req, res) => {
  const deleted = userService.deleteUser(req.params.id);
  if (deleted) {
    res.status(204).send();
  } else {
    res.status(404).json({ message: 'Usuario no encontrado' });
  }
});

app.listen(port, () => {
  console.log(`Servidor corriendo en http://localhost:${port}`);
});