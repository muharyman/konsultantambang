import React, { Component } from 'react';
import classNames from 'classnames';
import PropTypes from 'prop-types';
import SwipeableViews from 'react-swipeable-views';
import withStyles from '@material-ui/core/styles/withStyles';
import Tabs from '@material-ui/core/Tabs';
import Tab from '@material-ui/core/Tab';
import GridContainer from './GridContainer';
import GridItem from './GridItem';
import navPillsStyle from '../assets/navPillsStyle';

class NavPills extends Component {
    constructor(props) {
        super(props);
        this.state = {
            active: props.active
        };
    }

    handleChange= (event, active) => {
        this.setState({active});
    };

    handleChangeIndex = (index) => {
        this.setState({active: index});
    };

    render() {
        const {
            classes,
            tabs,
            direction,
            color,
            horizontal,
            alignCenter
        } = this.props;

        const flexContainerClasses = classNames({
            [classes.flexContainer]: true,
            [classes.horizontalDisplay]: horizontal !== undefined
        });

        const tabButtons = (
            <Tabs
                classes={{
                    root: classes.root,
                    fixed: classes.fixed,
                    flexContainer: flexContainerClasses,
                    indicator: classes.displayNone
                }}
                value= {this.state.active}
                onChange={this.handleChange}
                centered={alignCenter}
            >
                {tabs.map((prop, key) => {
                    var icon = {};
                    if (prop.tabIcon !== undefined) {
                        icon['icon'] = <prop.tabIcon classNames={classes.tabIcon} />;
                    }
                    const pillsClasses = classNames({
                        [classes.pills]: true,
                        [classes.horizontalPills]: horizontal !== undefined,
                        [classes.pillsWithIcons]: prop.tabIcon !== undefined
                    });

                    return (
                        <Tab
                            label={prop.tabButton}
                            key={key}
                            {...icon}
                            classes={{
                                root: pillsClasses,
                                labelContainer: classes.labelContainer,
                                label: classes.label,
                                selected: classes[color]
                            }}
                        />
                    );
                } )} 
            </Tabs>
        );

        const tabContent = (
            <div className={classes.contentWrapper}>
                <SwipeableViews
                    axis={direction === "rtl" ? 'x-reverse' : 'x'}
                    index={this.state.active}
                    onChangeIndex={this.handleChangeIndex}
                >
                    {tabs.map((prop, key) => {
                        return (
                            <div className={classes.tabContent} key={key}>
                                {prop.tabContent}
                            </div>
                        );
                    } )}
                </SwipeableViews>
            </div>
        );

        return horizontal !== undefined ? (
            <GridContainer>
                <GridItem {...horizontal.tabsGrid}>
                    {tabButtons}
                </GridItem>
                <GridItem {...horizontal.contentGrid}>
                    {tabContent}
                </GridItem>
            </GridContainer>
        ) : (
            <div>
                {tabButtons}
                {tabContent}
            </div>
        );
    }
}

NavPills.defaultProps = {
    active: 0,
    color: 'primary' //bisa lihat di navpillsStyle kalau mau liat detail warna2, dan kubuat warnanya sama dengan yang ada di infoAreaStyle
};

NavPills.propTypes = {
    classes: PropTypes.object.isRequired,
    active: PropTypes.number, //ini active pill yang di aktif
    tabs: PropTypes.arrayOf(
        PropTypes.shape({
            tabButton: PropTypes.string,
            tabIcon: PropTypes.func,
            tabContent: PropTypes.node
        })
    ).isRequired,
    color: PropTypes.oneOf([
        'primary', 'warning', 'danger', 'success', 'info', 'rose'
    ]),
    direction: PropTypes.string,
    horizontal: PropTypes.shape({
        tabsGrid: PropTypes.object,
        contentGrid: PropTypes.object
    }),
    alignCenter: PropTypes.bool
};

export default withStyles(navPillsStyle)(NavPills);