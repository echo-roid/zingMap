import React, {
  useState,
  useEffect,
  useRef
} from "react";
import {
  Container
} from 'reactstrap';
import Swipe from "react-easy-swipe";
import Bottomtab from "../../component/common/bottomtab/Bottomtab.jsx";
import 'zingchart/es6';
import ZingChart from 'zingchart-react';
import 'zingchart/modules-es6/zingchart-maps.min.js'
import 'zingchart/modules-es6/zingchart-maps-ind.min.js'
import Draggable from "react-draggable";
import "./home.scss";

const Home = () => {

  const mapS = useRef()

  const [config] = useState({
  shapes: [
    {
      type: 'zingchart.maps',
      options: {
        name: "ind",
        style: {
          items: {
               KA: {
                 tooltip: {
                   text: 'Karnataka has 2,851 monthly users total',
                   backgroundColor: '#ff5722'
                 },
                 backgroundColor: '#ff5722',
                 label: {
                   visible: true
                 }
               },
               MH: {
                            tooltip: {
                              text: 'Maharashtra has 2,683 monthly users total',
                              backgroundColor: '#ff9800'
                            },
                            backgroundColor: '#ff9800',
                            label: {
                              visible: true
                            }
                          },


                          TN: {

                         backgroundColor: '#FFCDD2',
                        hoverState: {
             backgroundColor: '#EF9A9A'
           },

                      }


  }
      },




      }
    }
  ]
})






  return (
   <ZingChart data={config} height='600px'/>
  )




};

export default Home;
