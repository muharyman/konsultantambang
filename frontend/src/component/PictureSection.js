import React, { Component } from 'react';
import classNames from 'classnames';
import withStyles from '@material-ui/core/styles/withStyles';

// untuk logo
import IzinTambang from "@material-ui/icons/Assignment";
import IzinLingkungan from "@material-ui/icons/Assessment";

// component yang digunakan
import GridContainer from './GridContainer';
import GridItem from './GridItem';
import NavPills from './NavPills';

// untuk gambar yang akan dimasukkan

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
            
        )
    }
}