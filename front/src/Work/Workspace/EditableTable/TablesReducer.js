
export const changeSelectedItems = (data) => {
	return {
		type: ACTION_CHANGE_SELECTED_ITEMS,
		data: data
	}
}

export const changeTableName = (newTableName) => {
	return {
		type: ACTION_CHANGE_TABLE_NAME,
		data: newTableName
	}
}

export const deleteRecords = (key) => {
	return {
		type: ACTION_DELETE_RECORDS,
		data: key
	}
}

export const onToolbarPreparing = (data) => {
	return {
		type: ACTION_ON_TOOLBAR_PREPARING,
		data: data
	}
}

export const setDataSource = (tableName) => {
	return {
		type: ACTION_SET_DATASOURCE,
		data: tableName
	}
}

function TablesReducer(state = initialState, action) {
	switch(action.type) {
		case(ACTION_ON_TOOLBAR_PREPARING):

			break; // TODO: fix
		default:
			return state;
	}
}

export default TablesReducer;

