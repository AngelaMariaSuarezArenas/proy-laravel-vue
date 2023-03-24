const express = require('express')
const app = express()

// middlewares
app.use(express.json())
app.use(express.urlencoded({extended: false}))

const tipoEquipo = require('./routes/tipoEquipo')

app.use('/api/tiposequipos', tipoEquipo)

module.exports = app