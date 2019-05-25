import React, { Component } from 'react';
import { List, ListItem, withStyles } from "@material-ui/core";

import Favorite from "@material-ui/icons/Favorite";
import footerStyle from "../assets/footerStyle";

import classNames from "classnames";
import PropTypes from "prop-types";

function Footer({  ...props }) {
    const {classes, whiteFont} = props;
    const footerClasses = classNames({
        [classes.footer] : true,
        [classes.footerWhiteFont]: whiteFont
    });

    const aClasses = classNames({
        [classes.a]: true,
        [classes.footerWhiteFont]: whiteFont
    });

    return (
        <footer className={footerClasses}>
            <div className={classes.containerFluid}>
                <div className={classes.left}>
                    <List className={classes.list}>
                        <ListItem className={classes.inlineBlock}>
                            <a
                                // belum kebayang kebutuhan maupun profil perusahaannya
                                href="https://www.radiorodja.com"
                                className={classes.block}
                                target="_self"
                            >
                                Facebook  <span><i class="fab fa-facebook-f"></i></span>
                            </a>
                        </ListItem>
                        <ListItem className={classes.inlineBlock}>
                            <a      
                                // nanti diisi alamat profile page
                                href="https://www.radiorodja.com"
                                className={classes.block}
                                target="_self"
                            >
                                Twitter  <span><i className="fab fa-twitter"></i></span>
                            </a>
                        </ListItem>
                        <ListItem className={classes.inlineBlock}>
                            <a
                                // belum kebayang kebutuhan maupun profil perusahaannya
                                href="https://www.radiorodja.com"
                                className={classes.block}
                                target="_self"
                            >
                                Instagram  <span><i className="fab fa-instagram"></i></span>
                            </a>
                        </ListItem>
                    </List>
                </div>
                <div className={classes.right}>
                    &copy; {1900 + new Date().getYear()} , made by{" "}
                    <a
                        href="https://www.radiorodja.com"
                        className={aClasses}
                        target="_blank"
                    > 
                    {/* barangkali mau nulis nama tim kita hehe */}
                        Sunnah Team
                    </a>{" "}
                    for the best website.
                </div>
            </div>
        </footer>
    );
}

Footer.propTypes = {
    classes: PropTypes.object.isRequired,
    whiteFont: PropTypes.bool
};

export default withStyles(footerStyle)(Footer);