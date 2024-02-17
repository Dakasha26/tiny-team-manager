import axios from "axios";
import { push } from "connected-react-router";
import {SERVER_URL} from "../../../../constants";

export const sendRequest = (event) => {
    event.preventDefault();
    return (dispatch, getState) => {
        axios.get(SERVER_URL + "/work/getReport/GroupActivity", {
            firstDay: getState().work.reportActivity.firstDay,
            lastDay: getState().work.reportActivity.lastDay,
        })
        .then(res => {
            return res.data;
        })
        .catch(err => {
            throw err;
        })
    }
}
