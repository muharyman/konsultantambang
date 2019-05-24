import React, { Component } from 'react';
import classNames from 'classnames';
import withStyles from '@material-ui/core/styles/withStyles';

// untuk logo
import IzinTambang from "@material-ui/icons/Assignment";
import IzinLingkungan from "@material-ui/icons/Assessment";
import Others from '@material-ui/icons/Description';

// component yang digunakan
import GridContainer from './GridContainer';
import GridItem from './GridItem';
import NavPills from './NavPills';
import imageStyles from '../assets/imageStyles';

// untuk gambar yang akan dimasukkan
import gambar1 from '../assets/images/gambar1.jpg';
import gambar2 from '../assets/images/gambar2.jpg';
import gambar3 from '../assets/images/gambar3.jpg';
import gambar4 from '../assets/images/gambar4.jpg';
import gambar5 from '../assets/images/gambar5.jpg';
import gambar6 from '../assets/images/gambar6.jpg';

class PictureSection extends Component {
    render() {
        const {classes, ...rest} = this.props;
        const imageClasses = classNames(
            classes.imgRaised,
            classes.imgRoundedCircle,
            classes.imgFluid
        );

        const navImageClasses = classNames(classes.imgRounded, classes.imgGallery);

        return (
           <GridContainer justify='center' >
            <GridItem xs={12} sm={12} md={8} className={classes.navWrapper}>
                <NavPills
                    alignCenter
                    color='primary'
                    tabs={[
                        {
                            tabButton: 'Izin Tambang',
                            tabIcon: IzinTambang,
                            tabContent: (
                                <GridContainer justify='center'>
                                    <GridItem xs={12} sm={12} md={4}>
                                        <img
                                            alt='...'
                                            src={gambar1}
                                            className={navImageClasses}/>
                                        <img
                                            alt='...'
                                            src={gambar2}
                                            className={navImageClasses}/>
                                    </GridItem>
                                    <GridItem xs={12} sm={12} md={4}>
                                        <img
                                            alt='...'
                                            src={gambar3}
                                            className={navImageClasses}/>
                                        <img
                                            alt='...'
                                            src={gambar4}
                                            className={navImageClasses}/>
                                    </GridItem>
                                </GridContainer>
                            )
                        },

                        {
                            tabButton: 'Izin Lingkungan',
                            tabIcon: IzinLingkungan,
                            tabContent: (
                                <GridContainer justify='center'>
                                    <GridItem xs={12} sm={12} md={4}>
                                        <img
                                            alt='...'
                                            src={gambar5}
                                            className={navImageClasses}/>
                                        <img
                                            alt='...'
                                            src={gambar6}
                                            className={navImageClasses}/>
                                    </GridItem>
                                    <GridItem xs={12} sm={12} md={4}>
                                        <img
                                            alt='...'
                                            src={gambar1}
                                            className={navImageClasses}/>
                                        <img
                                            alt='...'
                                            src={gambar3}
                                            className={navImageClasses}/>
                                    </GridItem>
                                </GridContainer>
                            )
                        },

                        {
                            tabButton: 'Others',
                            tabIcon: Others,
                            tabContent: (
                                <GridContainer justify='center'>
                                    <GridItem xs={12} sm={12} md={4}>
                                        <img
                                            alt='...'
                                            src={gambar5}
                                            className={navImageClasses}/>
                                        <img
                                            alt='...'
                                            src={gambar6}
                                            className={navImageClasses}/>
                                    </GridItem>
                                    <GridItem xs={12} sm={12} md={4}>
                                        <img
                                            alt='...'
                                            src={gambar4}
                                            className={navImageClasses}/>
                                        <img
                                            alt='...'
                                            src={gambar2}
                                            className={navImageClasses}/>
                                    </GridItem>
                                </GridContainer>
                            )
                        }

                    ]}
                />
            </GridItem>
           </GridContainer>
        );
    }
}

export default withStyles(imageStyles)(PictureSection);