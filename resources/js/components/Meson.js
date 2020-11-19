import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import Select from 'react-select'



class Meson extends React.Component {

  constructor(props) {
    super(props);
    this.state = { 
      mesons: [],
     };
  }
  

  handleChange = e => {
    var self = this;
    self.setState( { mesons: [] } );
    if(e.value == 'meson'){
    axios.get('/api/mesons')
    .then(function (response) {
      var mesons = response.data.data.data;
      self.setState( { mesons: mesons } );
    })
  }
};

    render() {
      const options = [{label: 'ثبت در مزون من و فروش به وسیله  مزون', value: 'meson'},{label: 'فروش تک محصولی', value: 'own'}];      
      const mesonOptions = this.state.mesons.map((meson) => ({label: meson.name, value: meson.id}));     
      let mesonsSelectBox; 
      let mesonsSelectBoxTitle; 
      let mesonsSelectBoxStar; 
      if (this.state.mesons.length != 0) {
        mesonsSelectBox =  <Select options = {mesonOptions} name = "meson_id" value = {this.state.selection} placeholder= 'لطفا یک مورد را انتخاب کنید' />
        mesonsSelectBoxTitle =  'انتخاب مزون';
        mesonsSelectBoxStar =  '*';
      }
      else{
        mesonsSelectBox = ''
        mesonsSelectBoxTitle = ''
        mesonsSelectBoxStar = ''
      }   

      return (
       <div>
        <div className="form-group">
           <label className="control-label col-md-3 col-sm-3 col-xs-12" htmlFor="first-name">نحوه فروش محصول<span className="required">*</span>
           </label>
           <div className="col-md-6 col-sm-6 col-xs-12">
           <Select options = {options}  onChange={this.handleChange} name = "sell_way" value = {this.state.selection} placeholder= 'لطفا یک مورد را انتخاب کنید' />
           </div>
        </div>
        <div className="form-group">
           <label className="control-label col-md-3 col-sm-3 col-xs-12" htmlFor="first-name">{mesonsSelectBoxTitle} <span className="required">{mesonsSelectBoxStar}</span>
           </label>
           <div className="col-md-6 col-sm-6 col-xs-12">
              {mesonsSelectBox}
           </div>
        </div>
       </div>
      );
    }
  }

if (document.getElementById('meson')) {

    ReactDOM.render(<Meson />, document.getElementById('meson'));
}

