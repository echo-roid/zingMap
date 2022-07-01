import React from 'react';
import ReactDOM from 'react-dom';
import { Container } from 'reactstrap';
import dummy_logo from "../../../assets/images/dummy_logo.png";
import dummysearch from "../../../assets/images/dummy-search.png";
import dummymenu from "../../../assets/images/dummy-menu.png";
import "./header.scss";







const Header = (props) =>{

const { funname } = props;

   return(
       <>

        <header className="bg-black py-2">
           <Container>
                     <div className="head-wrap d-flex justify-content-between align-items-center ">
                          <div className="left-head">
                                <img src={dummymenu} onClick={funname}/>
                          </div>

                            <div class="mid-head">

                             <img src={dummy_logo} className="w-75"/>
                             </div>

                            <div className='right-head' >
                                <img src={dummysearch}  onClick={funname} />
                            </div>

                    </div>

           </Container>
        </header>

     </>
   )

};

export default Header;
