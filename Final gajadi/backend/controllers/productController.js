import Product from "../models/productModel.js";
import asyncHandler from 'express-async-handler';

//@description fetch all produk
//@route get api/products
//@access Public route
const getProducts = asyncHandler(async (req,res) => {
    const products = await Product.find ({})
    res.json(products)
})

//@description fetch satuan(single) produk
//@route get api/products
//@access Public route
const getProductbyId = asyncHandler(async (req,res) => {
    const product = await Product.findById(req.params.id)
    if(product){
        res.json(product)
    }else {
        res.status(404)
        throw new Error('Tidak Ditemukan')
    }
})

export {
    getProducts, getProductbyId
}