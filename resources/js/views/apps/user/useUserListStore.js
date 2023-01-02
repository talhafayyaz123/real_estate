import axios from '@axios'
import { defineStore } from 'pinia'

export const useUserListStore = defineStore('UserListStore', {
  actions: {
    // 👉 Fetch users data
    fetchUsers(params) { return axios.get('/apps/users/list', { params }) },
    fetchProperty(params) { return axios.get('/apps/users/property', { params }) },

    // 👉 Add User
    addUser(userData) {


      return new Promise((resolve, reject) => {
        axios.post('/apps/users/user', {
          user: userData,
        }).then(response => resolve(response))
          .catch(error => reject(error))
      })
    },
    addProperty(userData) {

      return new Promise((resolve, reject) => {
        axios.post('/apps/users/property', {
          user: userData,
        }).then(response => resolve(response))
          .catch(error => reject(error))
      })
    },
    searchProperty(name) {

      return new Promise((resolve, reject) => {
        axios.get(`/search/properties/${name}`).then(response => resolve(response)).catch(error => reject(error))
      })
    },

    // 👉 fetch single user
    fetchUser(id) {
      return new Promise((resolve, reject) => {
        axios.get(`/apps/users/${id}`).then(response => resolve(response)).catch(error => reject(error))
      })
    },
  },
})
