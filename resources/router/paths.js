/**
 * Define all of your application routes here
 * for more information on routes, see the
 * official documentation https://router.vuejs.org/en/
 */
export default [
  {
   
  path: '/',
  view: 'Dashboard'

  },
  {
    path: '/dashboard',
    // Relative to /src/views
    view: 'Dashboard'
  },
  {
    path: '/create-member',
    name: 'User Profile',
    view: 'CreateMember'
  },
  {
    path: '/members-table',
    name: 'Members Table',
    view: 'MembersTable'
  },
  {
    path: '/typography',
    view: 'Typography'
  },
  {
    path: '/icons',
    view: 'Icons'
  },
  {
    path: '/maps',
    view: 'Maps'
  },
  {
    path: '/notifications',
    view: 'Notifications'
  },
  {
    path: '/upgrade',
    name: 'Upgrade to PRO',
    view: 'Upgrade'
  },
  {
    path: '/create',
    name: 'Create Member',
    view: 'Create'
  }
]
