import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import Select from 'react-select'



class Meson extends React.Component {

  constructor(props){
    super(props);
}

  handleChange = e => {
    var self = this;
    axios.get('/api/mesons')
    .then(function (response) {
      console.log(response.data);
      var categories = response.data;
    })
};

    render() {
      const options = [{label: 'ثبت در مزون من و فروش به وسیله  مزون', value: 'yes'},{label: 'فروش تک محصولی', value: 'no'}];      

      return (
       <div>
        <div className="form-group">
           <label className="control-label col-md-3 col-sm-3 col-xs-12" htmlFor="first-name">نحوه فروش محصول<span className="required">*</span>
           </label>
           <div className="col-md-6 col-sm-6 col-xs-12">
           <Select options = {options}  onChange={this.handleChange} placeholder= 'لطفا یک مورد را انتخاب کنید' />
           </div>
        </div>
       </div>
      );
    }
  }

if (document.getElementById('meson')) {

    ReactDOM.render(<Meson />, document.getElementById('meson'));
}

