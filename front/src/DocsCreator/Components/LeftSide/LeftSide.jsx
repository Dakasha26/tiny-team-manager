import 'bootstrap/dist/css/bootstrap.min.css';
import css from './LeftSide.module.css'
import {NavLink} from "react-router-dom";


function LeftSide() {
    return (
        <div className={`col ${css.sample}`}>
            leftSide
        </div>
    )
}

export default LeftSide;