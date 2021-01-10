import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';



class Feature extends React.Component {

  constructor(props) {
    super(props);
    this.state = { 
      features: []
     };
  }


  static getDerivedStateFromProps(nextProps, prevState) {
      return {
        features: nextProps.dataFromParent,
      };
      }

    render() {
      const features = [];
      if(this.state.features !== undefined){
             let AdsFeatures = this.state.features.data.map((feature) => {
               let featureName ="features["+feature.id+"]";
              features.push(<div className="col-md-12 col-sm-12"><div className="col-md-12 col-sm-12 col-xs-12 form-group has-feedback"><input type="text"  name={featureName} className="form-control has-feedback-left" id="inputSuccess2" placeholder={feature.name}/><span className="fa fa-tags form-control-feedback left" aria-hidden="true"></span></div></div>)
             });
      }
  
      return (
        <div className="border-top">
        <label className="control-label col-12 text-center row">اطلاعات تکمیلی</label>
        <div className="border-bottom form-group row pt-3">
         {features}
         </div>
     </div>
      );
    }
  }

export default Feature;


