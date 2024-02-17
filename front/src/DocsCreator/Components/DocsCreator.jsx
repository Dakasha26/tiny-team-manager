import 'bootstrap/dist/css/bootstrap.min.css';
import css from './DocsCreator.module.css'
import {NavLink} from "react-router-dom";
import Header from "./Header/Header";
import LeftSide from "./LeftSide/LeftSide";
import RightSide from "./RightSide/RightSide";


function DocsCreator() {
    return (
        <div className={`row ${css.wrapper}`}>
            <Header/>
            <LeftSide/>
            <RightSide/>
        </div>
    )
}

export default DocsCreator;