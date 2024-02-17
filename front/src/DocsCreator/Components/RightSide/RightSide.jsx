import 'bootstrap/dist/css/bootstrap.min.css';
import css from './RightSide.module.css'
import {NavLink} from "react-router-dom";


function RightSide() {
    return (
        <div className={`col ${css.editor}`}>
            rightside
        </div>
    )
}

export default RightSide;