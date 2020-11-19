import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import Select from 'react-select'



class Category extends React.Component {

  constructor(props) {
    super(props);
    this.state = { 
      groups: [],
      categories: []
     };
  }
  

  componentDidMount() {
    var self = this;
    axios.get('/api/groups')
    .then(function (response) {
      var groups = response.data.data;
      self.setState( { groups: groups } )
    })
  }
  handleChange = e => {
    var self = this;
    self.setState( { categories: [] } );
    axios.get('/api/categories/' + e.value)
    .then(function (response) {
      var categories = response.data;
      self.setState( { categories: categories } );
    })
};
    render() {
      const options = this.state.groups.map((group) => ({label: group.name, value: group.id}));      
      const categories = this.state.categories.map((group) => ({label: group.name, value: group.id}));      
      let categoriesSelectBox;
      let groupSelectBox;
        groupSelectBox =  <Select options = {options} name = "group_id"  onChange={this.handleChange} placeholder= 'لطفا یک مورد را انتخاب کنید' />
      if (this.state.categories.length != 0) {
        categoriesSelectBox =  <Select options = {categories} name = "cat_id" value = {this.state.selection} placeholder= 'لطفا یک مورد را انتخاب کنید' />
      }
      else{
        categoriesSelectBox = ''
      }
      return (
        <div>
        <div className="form-group">
           <label className="control-label col-md-3 col-sm-3 col-xs-12" htmlFor="first-name">گروه آگهی<span className="required">*</span>
           </label>
           <div className="col-md-6 col-sm-6 col-xs-12">
           {groupSelectBox}
           </div>
        </div>
        <div className="form-group">
           <label className="control-label col-md-3 col-sm-3 col-xs-12" htmlFor="first-name">دسته بندی آگهی<span className="required">*</span>
           </label>
           <div className="col-md-6 col-sm-6 col-xs-12">
              {categoriesSelectBox}
           </div>
        </div>
     </div>
      );
    }
  }

if (document.getElementById('category')) {
    ReactDOM.render(<Category />, document.getElementById('category'));
}

