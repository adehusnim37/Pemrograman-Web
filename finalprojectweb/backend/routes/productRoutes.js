import express from 'express'
import Product from "../models/productModel.js";
import asyncHandler from 'express-async-handler';
import products from "../data/products";

const router = express.Router()

router.get('/', asyncHandler (req, res) => {
    const products = await Product.find ({})
    res.json(products)
})

router.get('/:id', (req, res) => {
    const product = awai
    res.json(product)
})

export default router