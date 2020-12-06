import React from "react";
import {Link} from "react-router-dom";
import {Row, Col, Image, ListGroup, Card, Button, ListGroupItem} from "react-bootstrap";
import Rating from "../components/Rating";
import products from "../products";

const ProductsScreen = ({match}) => {
    const product = products.find(p => p._id === match.params.id)
    return (
        <>
            <Link className=' btn btn-light my3' to='/'>
                Kembali
            </Link>

            <Row>
                <Col md={6}>
                    <Image src={product.image} alt={product.name} fluid/>
                </Col>
                <Col md={3}>
                    <ListGroup variant='flush'>
                        <ListGroup.Item>
                            <h2>{product.name}</h2>
                        </ListGroup.Item>
                        <ListGroup.Item>
                            <Rating
                                value={product.rating}
                                text={`${product.numReviews} reviews`}
                            />
                        </ListGroup.Item>
                        <ListGroup.Item>
                            Price: Rp.{product.price}
                        </ListGroup.Item>
                        <ListGroup.Item>
                            Description: {product.description}
                        </ListGroup.Item>
                    </ListGroup>
                </Col>

                <Col md={3}>
                    <Card>
                        <ListGroup variant={"flush"}>
                            <ListGroup.Item>
                                <Row>
                                    <Col>
                                        Harga :
                                    </Col>
                                    <Col>
                                        <strong>${product.price}</strong>
                                    </Col>
                                </Row>
                            </ListGroup.Item>
                            <ListGroup.Item>
                                <Row>
                                    <Col>
                                        Stok :
                                    </Col>
                                    <Col>
                                        {product.countInStock > 0 ? 'Tersedia' : 'Habis'}
                                    </Col>
                                </Row>
                            </ListGroup.Item>
                            <ListGroup.Item>
                                <Button className='btn-block' type='Button' disabled={product.countInStock === 0}>
                                    Masukkan Ke Keranjang
                                </Button>
                            </ListGroup.Item>
                        </ListGroup>
                    </Card>
                </Col>

            </Row>

        </>
    )
}

export default ProductsScreen