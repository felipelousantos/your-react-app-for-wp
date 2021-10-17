import PostCard from './PostCard.js';
import posts from '../api/GetPosts.js';

const postsABC = ['a', 'b', 'c'];
const listItems = postsABC.map((post) =>
	<PostCard key={post} name={post} />
);

console.log(posts);

function PostList(props) {

	return (
		<>
			{listItems}
		</>
	);

}

export default PostList;
