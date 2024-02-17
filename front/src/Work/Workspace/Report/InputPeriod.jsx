import React, { useState } from 'react';
import ReactDateInputs from 'react-date-inputs';
import css from "../../../Registration/registration.module.css";
import GroupActivity from "./GroupActivity";
import {SERVER_URL} from "../../../constants";
import axios from 'axios';
import {connect} from "react-redux";
import {changeFirstDay, changeLastDay, getReportFromServer} from "../../WorkReducer";
import {sendRequest} from "./Components/GroupActivityRequest";

function InputPeriod(props) {
    const [value, setValue] = useState(new Date());

    return(
        <div> {/* TODO: Переделать на красивый календарик */}
            <form onSubmit={() => props.sendRequest}>
                <ReactDateInputs value={props.firstDay} onChange={setValue} id='firstDay'/>
                <ReactDateInputs value={props.lastDay} onChange={setValue} id='lastDay' />
                <button type="submit" className={`btn btn-primary btn-lg col ${css.btn}`}>
                    Выбрать
                </button>  {/* TODO отправить данные на сервер*/}
            </form>

            <GroupActivity tableName='groupActivity' name={props.name} data={props.data} columns={props.columns} />
        </div>
    );
}



const mapStateToProps = (state) => {
    let s = state.work;
    return {
        firstDay: s.firstDay,
        lastDay: s.lastDay,
    }
}

const mapDispatchToProps = (dispatch) => {
    return {
        changeFirstDay: (e) => dispatch(changeFirstDay(e.target.value)),
        changeLastDay: (e) => dispatch(changeLastDay(e.target.value)),
        sendRequest : (e) => dispatch(sendRequest(e))
    }
}

export default connect(mapStateToProps, mapDispatchToProps)(InputPeriod); // TODO: прокинуть dispatch и props