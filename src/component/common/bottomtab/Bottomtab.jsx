import React from 'react';
import ReactDOM  from 'react-dom';
import { Container } from 'reactstrap';
import {Link}  from 'react-router-dom';
import "./bottomtab.scss";

import { AiFillHome } from 'react-icons/ai';
import  {HiTemplate} from  'react-icons/hi';
import  {BsWalletFill} from  'react-icons/bs'


const Bottomtab = (props) =>{
  const {scrollState} = props;
   return(<>
        <div className = "bottomtab" id= "tabbottom"  style={{ bottom: scrollState ? 0 : "-100%" }}>
            <div className="left-tab">
                        <Link to="/work/" className="text-white">  <BsWalletFill /> </Link>
              </div>
              <div className="mid-tab">
                  <Link to="/home/">  <AiFillHome className="activetab"/> </Link>
              </div>
            <div className="right-tab">
                   <Link to="/library" className="text-white"> <HiTemplate/> </Link>
           </div>
        </div>

      </>)
}
export default Bottomtab
