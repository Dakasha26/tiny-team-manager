
import { SimpleForm, TextInput, DateInput } from 'react-admin';

function AdminPanel(props) {
    return(
        <SimpleForm>
            <TextInput source="title" />
            <TextInput source="teaser" options={{ multiLine: true }} />
            <DateInput label="Publication date" source="published_at" defaultValue={new Date()} />
        </SimpleForm>
    );
}

export default AdminPanel;