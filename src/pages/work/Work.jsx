import React, { useState } from "react";
import { Container } from 'reactstrap';
import { Carousel } from 'react-responsive-carousel';
import  Swipe from "react-easy-swipe";
import "./work.scss";
import frame1 from "../../assets/images/slider1.png";
import frame2 from "../../assets/images/slider2.png";
import frame3 from "../../assets/images/slider3.png";
import frame4 from "../../assets/images/slider4.png";
import frame5 from "../../assets/images/slider5.png";
import framephone from "../../assets/images/framephone.png";
import Bottomtab from "../../component/common/bottomtab/Bottomtab.jsx";



const Work = () =>{
    const [ positionState, setpositionState ] = useState(true);
    return(<>
        <section className="work">
               <Container >
                   <div className="work-wrap">
                      <div className="jnto"><h6>JNTO</h6></div>
                          <div className="framecover position-relative text-center">
                                <img src={framephone} className="framephone"/>
                         <Carousel showThumbs={false}>
                               <div className="slider-div">
                                   <img src={frame1 } />
                                   <p className="legend">Legend 1</p>
                               </div>
                               <div className="slider-div">
                                   <img src={frame2 } />
                                   <p className="legend">Legend 2</p>
                               </div>
                               <div className="slider-div">
                                   <img src={frame3 } />
                                   <p className="legend">Legend 3</p>
                               </div>

                               <div className="slider-div">
                                   <img src={frame4 } />
                                   <p className="legend">Legend 3</p>
                               </div>
                               <div className="slider-div">
                                   <img src={frame5 } />
                                   <p className="legend">Legend 3</p>
                               </div>

                        </Carousel>
                          <div className = "showmore text-center">
                               <span className="text-white">View Details</span>
                          </div>
                          </div>

                     <div className="flow-div">
                          <ul className="d-flex align-items-center">
                              <li><img src={frame1}/></li>
                                 <li><img src={frame2}/></li>
                                   <li><img src={frame3}/></li>
                                    <li><img src={frame4}/></li>
                                  <li><img src={frame5}/></li>
                          </ul>
                     </div>
                     <Bottomtab scrollState={positionState}/>
                   </div>
               </Container>
       </section>

   </>)
}


export default Work;
