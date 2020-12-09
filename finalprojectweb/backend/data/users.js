import bcrypt from 'bcryptjs'

const users = [
    {
        name: 'Admin User',
        email: 'perdanasarjana@gmail.com',
        password: bcrypt.hashSync('ryugamine123A',20),
        isAdmin:true
    },
    {
        name: 'Ade Husni M',
        email: 'user@perdanasarjana.com',
        password: bcrypt.hashSync('user',20)
    },
]

export default users