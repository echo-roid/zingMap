import React from 'react';
import ReactDOM from 'react-dom';
import { Container } from 'reactstrap';
import "./menubar.scss";
import  {ImCross} from  'react-icons/im'
import ekaleidologo from "../../../assets/images/ekaleidologobar.svg";






const Menubar  = (props) => {

  const { funname } = props;
  return( <>
  <div className="menubar">
            <div className="text-start text-white">
                   <ImCross onClick={funname}/>
            </div>
            <ul>
                           <li className="logoli"><img src={ekaleidologo}/></li>
                           <li> HOME </li>
                           <li> ABOUT US </li>
                           <li> PRODUCTS</li>
                           <li> WORK </li>
                           <li> LIBRARY </li>
                           <li> CONTACT US </li>

            </ul>
  </div>
</>)
}
export default Menubar
