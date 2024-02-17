import axios from "axios";
import {SERVER_URL} from "../constants";

const ACTION_CHANGE_FIRST_DAY = 'ACTION_CHANGE_FIRST_DAY';
const ACTION_CHANGE_LAST_DAY = 'ACTION_CHANGE_LAST_DAY';
const ACTION_GET_REPORT_FROM_SERVER = 'ACTION_GET_REPORT_FROM_SERVER';

const initialState = {
	firstDay: "",
	lastDay: "",

	navDatabases: [
		{
			id: '0',
			linkUrl: '../work/members',
			linkName: 'Участники'
		},
		{
			id: '1',
			linkUrl: '../work/events',
			linkName: 'Мероприятия'
		},
		{
			id: '2',
			linkUrl: '../work/activities',
			linkName: 'Активности'
		},
		/*{
			id: '3',
			linkUrl: '../work/positions',
			linkName: 'Должности'
		}TODO: вернуть*/
	]
}

export const changeFirstDay = (newFirstDay) => {
	return {
		type: ACTION_CHANGE_FIRST_DAY,
		data: newFirstDay
	}
}
export const changeLastDay = (newLastDay) => {
	return {
		type: ACTION_CHANGE_LAST_DAY,
		data: newLastDay
	}
}

export const getReportFromServer = (firstDay, lastDay) => {
	axios.get(SERVER_URL + "/work/getReportGroupActivity", {
		firstDay: firstDay,
		lastDay: lastDay
	}).then();
}


function WorkReducer(state = initialState, action) {
	switch(action.type) {
		case(ACTION_CHANGE_FIRST_DAY):
			console.log(state.work.firstDay);
			return Object.assign({}, state, {firstDay: action.data});
		case(ACTION_CHANGE_LAST_DAY):
			return Object.assign({}, state, {lastDay: action.data});
		case(ACTION_GET_REPORT_FROM_SERVER):
			return getReportFromServer(state);
		default:
			return state; 
	}
}

export default WorkReducer;