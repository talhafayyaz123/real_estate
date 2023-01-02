import mock from '@/@fake-db/mock'
import avatar7 from '@images/avatars/avatar-7.png'

const users = [

  {
    id: 28,
    fullName: 'Bree Kilday',
    company: 'Jetpulse PVT LTD',
    role: 'maintainer',
    country: 'Portugal',
    contact: '(412) 476-0854',
    email: 'bkildayr@mashable.com',
    currentPlan: 'team',
    status: 'active',
    avatar: '',
    billing: 'Auto Debit',
  },
  {
    id: 29,
    fullName: 'Candice Pinyon',
    company: 'Kare PVT LTD',
    role: 'maintainer',
    country: 'Sweden',
    contact: '(170) 683-1520',
    email: 'cpinyons@behance.net',
    currentPlan: 'team',
    status: 'active',
    avatar: avatar7,
    billing: 'Auto Debit',
  },

]

const Property = [

  {
    id: 28,
    name: 'Amanah Mall',
    number: '220#123abc',
    role: 'maintainer',
    country: 'Portugal',
    contact: '(412) 476-0854',
    email: 'bkildayr@mashable.com',
    type: 'House',
    price: '$45000',
    status: 'active',
    avatar: '',
    billing: 'Auto Debit',
  },
  {
    id: 29,
    name: 'Package Mall',
    number: '333#122Abc',
    role: 'maintainer',
    country: 'Sweden',
    contact: '(170) 683-1520',
    email: 'cpinyons@behance.net',
    type: 'Shop',
    price: '$5000',
    status: 'inactive',
    avatar: avatar7,
    billing: 'Auto Debit',
  },

]

// 👉  return users
mock.onGet('/apps/users/list').reply(config => {
  const { q = '', role = null, plan = null, status = null, perPage = 10, currentPage = 1 } = config.params ?? {}
  const queryLower = q.toLowerCase()
  let filteredUsers = users.filter(user => ((user.fullName.toLowerCase().includes(queryLower) || user.email.toLowerCase().includes(queryLower)) && user.role === (role || user.role) && user.currentPlan === (plan || user.currentPlan) && user.status === (status || user.status))).reverse()
  const totalPage = Math.ceil(filteredUsers.length / perPage) ? Math.ceil(filteredUsers.length / perPage) : 1
  const totalUsers = filteredUsers.length
  if (perPage) {
    const firstIndex = (currentPage - 1) * perPage
    const lastIndex = perPage * currentPage

    filteredUsers = filteredUsers.slice(firstIndex, lastIndex)
  }

  return [200, { users: filteredUsers, totalPage, totalUsers }]
})

mock.onGet('/apps/users/property').reply(config => {
  const { q = '', role = null, plan = null, status = null, perPage = 10, currentPage = 1 } = config.params ?? {}
  const queryLower = q.toLowerCase()
  let filteredUsers = Property.filter(user => ((user.name.toLowerCase().includes(queryLower)) && user.role === (role || user.role) && user.type === (plan || user.type) && user.status === (status || user.status))).reverse()
  const totalPage = Math.ceil(filteredUsers.length / perPage) ? Math.ceil(filteredUsers.length / perPage) : 1
  const totalUsers = filteredUsers.length
  if (perPage) {
    const firstIndex = (currentPage - 1) * perPage
    const lastIndex = perPage * currentPage

    filteredUsers = filteredUsers.slice(firstIndex, lastIndex)
  }

  return [200, { users: filteredUsers, totalPage, totalUsers }]
})


// 👉 Add user
mock.onPost('/apps/users/user').reply(config => {
  const { user } = JSON.parse(config.data)
  const { length } = users
  let lastIndex = 0
  if (length)
    lastIndex = users[length - 1].id
  user.id = lastIndex + 1
  users.push(user)

  return [201, { user }]
})

mock.onPost('/apps/users/property').reply(config => {
  const { user } = JSON.parse(config.data)
  const { length } = users
  let lastIndex = 0
  if (length)
    lastIndex = Property[length - 1].id
  Property.id = lastIndex + 1
  Property.push(user)

  return [201, { user }]
})

mock.onGet(/\/apps\/users\/\d+/).reply(config => {
  // Get event id from URL
  const userId = config.url?.substring(config.url.lastIndexOf('/') + 1)

  // Convert Id to number
  const Id = Number(userId)
  const userIndex = users.findIndex(e => e.id === Id)
  const user = users[userIndex]

  Object.assign(user, {
    taskDone: 1230,
    projectDone: 568,
    taxId: 'Tax-8894',
    language: 'English',
  })
  if (user)
    return [200, user]

  return [404]
})
