const express = require ('express')
const morgan = require ('morgan')
const path = require ('path')

const app = express()

// settings
app.set('port' , process.env.PORT || 2000)


//static files
app.use(express.static(path.join(__dirname, '/public')))

app.listen(app.get('port'), () =>{
    console.log(`server on port ${app.get('port')}`);
})