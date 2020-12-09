import React, { useState, useEffect} from 'react';
import {Link} from "react-router-dom";
import {useDispatch, useSelector} from "react-redux";
import {Form,Row, Col, Image, ListGroup, Card, Button, ListGroupItem} from "react-bootstrap";
import Rating from "../components/Rating";
import Loader from "../components/Loader";
import Message from "../components/Message";
import { listProductDetails } from '../actions/productActions'


const ProductsScreen = ({ history, match }) => {
    const [qty,setQty] = useState(1)

    const dispatch = useDispatch()

    const productDetails = useSelector((state) => state.productDetails)
    const { loading, error, product } = productDetails

    useEffect( () => {
        dispatch(listProductDetails(match.params.id))
    }, [dispatch, match])

    const addToCartHandler = () => {
        history.push(`/cart/${match.params.id}?qty=${qty}`)
    }

        return (
            <>
                <Link className=' btn btn-black my3' to='/'>
                    Kembali
                </Link>
                {loading ? (
                    <Loader/>
                ): error ? (
                    <Message variant='danger'>{error}</Message>
                ): (<Row>
                    <Col md={6}>
                        <Image src={product.image} alt={product.name} fluid></Image>
                    </Col>
                    <Col md={3}>
                        <ListGroup variant='flush'>
                            <ListGroup.Item>
                                <h2>{product.name}</h2>
                            </ListGroup.Item>
                            <ListGroupItem>
                                <Rating
                                    text={`${product.numReviews} reviews`}
                                    value={product.rating}
                                />
                            </ListGroupItem>
                            <ListGroupItem>
                                Price: ${product.price}
                            </ListGroupItem>
                            <ListGroupItem>
                                Description: {product.description}
                            </ListGroupItem>
                        </ListGroup>
                    </Col>

                    <Col md={3}>
                        <Card>
                            <ListGroup variant={"flush"}>
                                <ListGroupItem>
                                    <Row>
                                        <Col>
                                            Harga :
                                        </Col>
                                        <Col>
                                            <strong>${product.price}</strong>
                                        </Col>
                                    </Row>
                                </ListGroupItem>

                                <ListGroupItem>
                                    <Row>
                                        <Col>
                                            Stok :
                                        </Col>
                                        <Col>
                                            {product.countInStock > 0 ? 'Tersedia' : 'Habis'}
                                        </Col>
                                    </Row>
                                </ListGroupItem>

                                {product.countInStock > 0 &&(
                                    <ListGroup.Item>
                                        <Row>
                                            <Col>Jumlah</Col>
                                            <Col>
                                                <Form.Control as='select' value={qty} onChange={(e) => setQty(e.target.value)}>
                                                    {
                                                        [...Array(product.countInStock).keys()].map((x) => (
                                                            <option key={x + 1} value={x + 1}>
                                                                {x + 1}
                                                            </option>
                                                        ))
                                                    }
                                                </Form.Control>
                                            </Col>
                                        </Row>
                                    </ListGroup.Item>
                                )}

                                <ListGroupItem>
                                    <Button onClick={addToCartHandler} className='btn-block' type='Button' disabled={product.countInStock === 0}>
                                        Masukkan Ke Keranjang
                                    </Button>
                                </ListGroupItem>
                            </ListGroup>
                        </Card>
                    </Col>
                </Row>
                )}
            </>
        )
}

export default ProductsScreen;