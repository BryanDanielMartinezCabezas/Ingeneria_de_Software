const User = require('./user');

class UserService {
  constructor() {
    this.userList = [];
    this.generateRandomUsers();
  }

  generateRandomUsers() {
    // Añadir un usuario específico "Bryan" con la contraseña "Bryan123"
    const bryanUser = new User(1, 'Bryan', 'Bryan123');
    this.userList.push(bryanUser);

    // Generar otros usuarios aleatorios
    for (let i = 0; i < 3; i++) {
      const id = this.userList.length + 1;
      const username = `user${id}`;
      const password = Math.random().toString(36).substring(7);
      this.userList.push(new User(id, username, password));
    }
  }

  getUsers() {
    return this.userList;
  }

  addUser(userData) {
    const id = this.userList.length + 1;
    const newUser = new User(id, userData.username, userData.password);
    this.userList.push(newUser);
    return newUser;
  }

  editUser(id, userData) {
    const user = this.userList.find(u => u.id === parseInt(id));
    if (user) {
      user.username = userData.username || user.username;
      user.password = userData.password || user.password;
      return user;
    }
    return null;
  }

  deleteUser(id) {
    const index = this.userList.findIndex(u => u.id === parseInt(id));
    if (index !== -1) {
      this.userList.splice(index, 1);
      return true;
    }
    return false;
  }
}

module.exports = UserService;
