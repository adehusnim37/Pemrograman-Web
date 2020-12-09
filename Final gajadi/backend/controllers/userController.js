import User from "../models/userModel.js";
import generateToken from "../utils/generateToken.js";
import asyncHandler from 'express-async-handler';

//@description validasi User dan mendapatkan token
//@route Post api/users/login
//@access Public route
const authUser = asyncHandler(async (req,res) => {
    const {email,password} = req.body
    const user = await User.findOne({email})

    if(user && (await user.matchPassword(password))){
        res.json({
            _id: user._id,
            name: user.name,
            email: user.email,
            isAdmin: user.isAdmin,
            token: generateToken(user._id)
        })
    } else {
        res.status(401)
        throw new Error('Kamu salah memasukkan password/email')
    }
})

//@description register user
//@route Post api/users
//@access Public route
const registerUser = asyncHandler(async (req, res) => {
    const { name, email, password } = req.body

    const userExists = await User.findOne({ email })

    if (userExists) {
        res.status(400)
        throw new Error('User already exists')
    }

    const user = await User.create({
        name,
        email,
        password,
    })

    if (user) {
        res.status(201).json({
            _id: user._id,
            name: user.name,
            email: user.email,
            isAdmin: user.isAdmin,
            token: generateToken(user._id),
        })
    } else {
        res.status(400)
        throw new Error('Invalid user data')
    }
})

//@description mendapatkan data user profile
//@route GET api/users/profile
//@access Private route
const getUserProfile = asyncHandler(async (req,res) => {
    const user = await User.findById(req.user._id)

    if(user){
        res.json({
            _id: user._id,
            name: user.name,
            email: user.email,
            isAdmin: user.isAdmin
        })
    }else {
        res.status(404)
        throw new Error('User Tidak Ditemukan')
    }
})



export {authUser,getUserProfile,registerUser}