export default [
  ...applyRules(['guest'], [
    { path: '', component: require('$comp/front/FrontWrapper').default, redirect: { name: 'houses' }, children:
      [
        { path: '', name: 'houses', component: require('$comp/front/houses/Houses').default },
      ]
    },
  ]),
  ...applyRules(['auth'], []),
  { path: '*', redirect: { name: 'index' } }
]

function applyRules(rules, routes) {
  for (let i in routes) {
    routes[i].meta = routes[i].meta || {}

    if (!routes[i].meta.rules) {
      routes[i].meta.rules = []
    }
    routes[i].meta.rules.unshift(...rules)

    if (routes[i].children) {
      routes[i].children = applyRules(rules, routes[i].children)
    }
  }

  return routes
}
