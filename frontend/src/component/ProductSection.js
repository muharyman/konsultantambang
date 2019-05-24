import React from 'react';
import withStyles from '@material-ui/core/styles/withStyles';
import GridContainer from './GridContainer';
import GridItem from './GridItem';
import InfoArea from './InfoArea';
import productStyles from '../assets/productStyle';

// icon yang diambil dari material-ui
import Lock from '@material-ui/icons/Https';
import VerifiedUser from '@material-ui/icons/VerifiedUser';
import Grade from '@material-ui/icons/Grade';

class ProductSection extends React.Component {
    render() {
        const {classes} =this.props;
        return (
            <div className={classes.section}>
                <GridContainer justify="center">
                    <GridItem xs={12} sm={12} md={12} md={8}>
                        <h2 className={classes.title}>Kualitas Produk</h2>
                        <h5 className={classes.description}>
                            Ini adalah paragraf untuk menjelaskan detail dari kualitas Produk
                            Ini adalah paragraf untuk menjelaskan detail dari kualitas Produk
                            Ini adalah paragraf untuk menjelaskan detail dari kualitas Produk
                            Ini adalah paragraf untuk menjelaskan detail dari kualitas Produk
                        </h5>
                    </GridItem>
                </GridContainer>
                <div>
                    {/* bagian yang menjelaskan keunggulan produk */}
                    <GridContainer>
                        <GridItem xs={12} sm={12} md={4}>
                            <InfoArea
                                title="Keamanan Terjamin"
                                description="Nanti ini diisi tentang keamanan apa yang jadi keunggulan perusahaan. Nanti ini diisi tentang keamanan apa yang jadi keunggulan perusahaan. Nanti ini diisi tentang keamanan apa yang jadi keunggulan perusahaan."
                                icon={Lock}
                                iconColor="info"
                                vertical
                            />
                        </GridItem>
                        <GridItem xs={12} sm={12} md={4}>
                            <InfoArea
                                title="Kualitas Terbaik"
                                description="Nanti ini diisi tentang kualitas apa yang jadi keunggulan perusahaan. Nanti ini diisi tentang kualitas apa yang jadi keunggulan perusahaan. Nanti ini diisi tentang kualitas apa yang jadi keunggulan perusahaan."
                                icon={Grade}
                                iconColor="warning"
                                vertical
                            />
                        </GridItem>
                        <GridItem xs={12} sm={12} md={4}>
                            <InfoArea
                                title="Handal dan Terpercaya"
                                description="Nanti ini diisi tentang kehandalan apa yang jadi keunggulan perusahaan. Nanti ini diisi tentang kualitas apa yang jadi keunggulan perusahaan. Nanti ini diisi tentang kualitas apa yang jadi keunggulan perusahaan."
                                icon={VerifiedUser}
                                iconColor="success"
                                vertical
                            />
                        </GridItem>
                    </GridContainer>
                </div>
            </div>
        );
    }
}

export default withStyles(productStyles)(ProductSection);
